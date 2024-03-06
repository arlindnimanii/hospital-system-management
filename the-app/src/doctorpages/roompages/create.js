import React, { useState, useEffect } from "react";

function CreateRoom() {
  const [room_number, setRoomNumber] = useState("");
  const [departments, setDepartments] = useState([]);
  const [department, setDepartment] = useState([]);

  useEffect(() => {
    FetchDepartment();
  }, []);

  function FetchDepartment() {
    fetch('http://127.0.0.1:8000/api/departments')
      .then(response => response.json())
      .then(data => setDepartments(data.departments))
      .catch(error => console.error(error));
  }

  const handleSubmit = (event) => {
    event.preventDefault();

    const formData = new FormData();
    formData.append("room_number", room_number);
    formData.append("department", department); 

    fetch("http://127.0.0.1:8000/api/rooms", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        window.location.href = "/doctorpages/roompages/Indexr";
      })
      .catch((error) => console.error(error));
  };

  return (
    <div className="container mt-4">
      <div className="d-flex justify-content-between align-items-center mb-4">
        <h1>Create Room</h1>
        <button
          className="btn btn-sm btn-outline-primary"
          onClick={() => window.history.back()}
        >
          Back
        </button>
      </div>
      <form onSubmit={handleSubmit}>
        <div className="form-group mb-2">
          <label htmlFor="name">Room Number</label>
          <input
            type="text"
            name="room_number"
            id="name"
            className="form-control"
            value={room_number}
            onChange={(e) => setRoomNumber(e.target.value)}
            required
          />
        </div>
        <div className="form-group mb-2">
          <label htmlFor="department">Department</label>
          <select
            name="department"
            id="department"
            className="form-control"
            value={department}
            onChange={(e) => setDepartment(e.target.value)}
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

export default CreateRoom;
