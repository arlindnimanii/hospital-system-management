
import React, { useEffect, useState } from 'react';
import axios from "axios";
import { useParams, useLocation } from "react-router-dom";

function EditRoom() {
  const [inputs, setInputs] = useState({});
  const [departments, setDepartments] = useState([]);
  const { id } = useParams();
  const location = useLocation();
  const { edit } = location.state || {};

  useEffect(() => {
    if (edit) {
      setInputs(edit);
    } else {
      getRoom();
    }
    getDepartments();
  }, []);

  function getRoom() {
    axios.get(`http://127.0.0.1:8000/api/rooms/${id}`).then(function (response) {
      console.log(response.data);
      setInputs(response.data);
    });
  }

  function getDepartments() {
    console.log("Fetching departments...");
    axios.get(`http://127.0.0.1:8000/api/departments`).then(function (response) {
      console.log(response.data);
      setDepartments(response.data.departments); // update the state with the response data
    });
  }

  const handleChange = (event) => {
    const name = event.target.name;
    const value = event.target.value;
    setInputs(values => ({ ...values, [name]: value }));
  }

  const handleSubmit = (event) => {
    event.preventDefault();
    axios.put(`http://127.0.0.1:8000/api/rooms/${id}`, inputs).then(function (response) {
      console.log(response.data);
      window.location.href = '/doctorpages/roompages/Indexr';
    });
  }

  return (
    <div className="container mt-4">
      <div className="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Room</h1>
        <button
          className="btn btn-sm btn-outline-primary"
          onClick={() => window.history.back()}
        >
          Back
        </button>
      </div>
      <form onSubmit={handleSubmit}>
        <div className="form-group mb-2">
          <label htmlFor="room_number">Room Number</label>
          <input
            type="number"
            name="room_number"
            id="room_number"
            className="form-control"
            value={inputs.room_number}
            onChange={handleChange}
            required
          />
        </div>
        <div className="form-group mb-2">
          <label htmlFor="status">Status</label>
          <input
            type="text"
            name="status"
            id="status"
            className="form-control"
            value={inputs.status}
            onChange={handleChange}
            required
          />
        </div>
        <div className="form-group mb-2">
          <label htmlFor="Department">Departments</label>
          <select
            name="department"
            id="department"
            className="form-control"
            value={inputs.department}
            onChange={handleChange}
            required
          >
            <option value="">Select a department</option>
            {Array.isArray(departments) && departments.map((department) => (
              <option key={department.id} value={department.name}>
                {department.name}
              </option>
            ))}
          </select>
        </div>
        <button type="submit" className="btn btn-sm btn-outline-secondary">
          Submit
        </button>
      </form>
    </div>
  );
}

export default EditRoom;