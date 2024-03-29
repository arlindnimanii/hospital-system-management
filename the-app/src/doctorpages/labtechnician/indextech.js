import React, { useState, useEffect } from 'react';
import { Link, useNavigate } from 'react-router-dom';

function Indextech() {
  const [technicians, setTechnicians] = useState([]);
  const navigate = useNavigate();

  useEffect(() => {
    FetchTechnicians();
  }, []);

  function FetchTechnicians() {
    fetch('http://127.0.0.1:8000/api/labtechnicians')
      .then(response => response.json())
      .then(data => setTechnicians(data.labtechnicians))
      .catch(error => console.error(error));
  }

  const handleDelete = (id) => {
    if (window.confirm('Are you sure you want to delete this technician?')) {
      fetch(`http://127.0.0.1:8000/api/labtechnicians/${id}`, { method: 'DELETE' })
        .then(() => {
          setTechnicians(technicians.filter(technician => technician.id !== id));
        })
        .catch(error => console.error(error));
    }
  }

  const sendToEdit = (id) => {
    const edit = technicians.find(technician => technician.id === id);
    if (edit) {
      navigate(`/doctorpages/labtechnician/edit/${id}`, { state: { edit } });
    }
  };

  return (
    <div className='container py-4'>
      <div className="d-flex justify-content-between align-items-center mb-4">
        <h1>Lab technicians</h1>
        <div>
          <Link to="/doctorpages/labtechnician/Create" className="btn btn-sm btn-outline-primary">
            Create
          </Link>
          &nbsp;
          <Link to="/doctorpages/doctorhomepage" className="btn btn-sm btn-outline-primary">
            Back
          </Link>
        </div>
      </div>
      <div className="table-responsive">
        <table className="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>name</th>
              <th>phone</th>
              <th>speciality</th>
              <th>Image</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            {technicians.map(technician => (
              <tr key={technician.id}>
                <td>{technician.id}</td>
                <td>{technician.name}</td>
                <td>{technician.phone}</td>
                <td>{technician.speciality}</td>
                <td>
                  <img
                    src={`http://127.0.0.1:8000/storage/labtechnicians/${technician.image}`}
                    alt={technician.name}
                    style={{ height: "90px" }}
                  />
                </td>
                <td>
                  <button
                    className="btn btn-sm btn-outline-secondary"
                    onClick={() => sendToEdit(technician.id)}
                  >
                    Edit
                  </button>
                  &nbsp;
                  <button
                    className="btn btn-sm btn-outline-danger"
                    onClick={() => handleDelete(technician.id)}
                  >
                    Delete
                  </button>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default Indextech;
