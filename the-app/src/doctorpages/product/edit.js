import React, { useEffect, useState } from 'react';
import axios from "axios";
import { useParams } from "react-router-dom";

function Editvitamins() {
  const [inputs, setInputs] = useState({ name: '',  category: '', price:'', qty:'', image: null });
  const [categories, setCategories] = useState([]);
  const { id } = useParams();

  useEffect(() => {
    getProduct();
    getCategories();
  }, []);

  function getProduct() {
    axios
      .get(`http://127.0.0.1:8000/api/products/${id}`)
      .then(function (response) {
        console.log(response.data);
        setInputs(response.data.product);

      });
  }
  

  function getCategories() {
    console.log("Fetching categories...");
    axios.get(`http://127.0.0.1:8000/api/category`)
      .then(function(response) {
        console.log(response.data);
        setCategories(response.data.categories);
      })
      .catch(function(error) {
        console.error(error);
      });
  }

  const handleChange = (event) => {
    const name = event.target.name;
    const value = event.target.value;
    setInputs((values) => ({ ...values, [name]: value }));
  };

  const handleSubmit = (event) => {
    event.preventDefault();
    axios.put(`http://127.0.0.1:8000/api/products/${id}`, inputs).then(function(response){
      console.log(response.data);
      window.location.href = '/product/indexp';
    });
  }

  const handleImageChange = (event) => {
    setInputs((inputs) => ({ ...inputs, image: event.target.files[0] }));
  };

  return (
    <div className="container mt-4">
      <div className="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit product</h1>
        <button
          className="btn btn-sm btn-outline-primary"
          onClick={() => window.history.back()}
        >
          Back
        </button>
      </div>
      <form onSubmit={handleSubmit}>
        <div className="form-group mb-2">
          <label htmlFor="name">Product Name</label>
          <input
            type="text"
            name="name"
            id="name"
            className="form-control"
            value={inputs.name}
            onChange={handleChange}
            required
          />
        </div>

        <div className="form-group mb-2">
          <label htmlFor="category">Category</label>
          <select
            name="category"
            id="category"
            className="form-control"
            value={inputs.category}
            onChange={handleChange}
            required
          >
            <option value="">Select a category</option>
            {categories.map((category) => (
              <option key={category.id} value={category.name}>
                {category.name}
              </option>
            ))}
          </select>
        </div>

        <div className="form-group mb-2">
          <label htmlFor="productPrice">Price</label>
          <input
            type="number"
            name="price"
            id="productPrice"
            className="form-control"
            value={inputs.price}
            onChange={handleChange}
            required
    />
  </div>

  <div className="form-group mb-2">
    <label htmlFor="qty">Quantity</label>
    <input
      type="number"
      name="qty"
      id="qty"
      className="form-control"
      value={inputs.qty}
      onChange={handleChange}
      required
    />
  </div>

  <div className="form-group mb-2">
    <label htmlFor="image">Image</label>
    <input
      type="file"
      name="image"
      id="image"
      className="form-control"
      onChange={handleImageChange}
    />
  </div>
  
  <button type="submit" className="btn btn-sm btn-outline-secondary">
    Submit
  </button>
</form>

    </div>
  );
}

export default Editvitamins;
