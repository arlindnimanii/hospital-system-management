import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

function Order() {
  
  const [orders, setOrders] = useState([]);

  const fetchUserOrders = (userId) => {

    fetch(`http://127.0.0.1:8000/api/getOrderByUserId?userId=${userId}`)
      .then((response) => response.json())
      .then((data) => {
        setOrders(data);
      })
      .catch((error) => {
        console.error('Error fetching user orders:', error);
      });
  };

  useEffect(() => {
    const user = localStorage.getItem('user');
    if (user) {
      const userData = JSON.parse(user);
      console.log(userData);          
      fetchUserOrders(userData.user.id); 
    }
  }, []);

  const deleteOrder = async (orderId) => {
    try {
      const token = localStorage.getItem('user'); 
      await axios.delete(`http://127.0.0.1:8000/api/orders/${orderId}`, {
        headers: {
          Authorization: `Bearer ${token}`, 
        },
      });
      fetchUserOrders(); 
    } catch (error) {
      console.error('Error deleting order:', error);
    }
  };

  return (
    <div className="container">
      <div className="back-to-top"></div>
      <div>
        <h1>Orders</h1>
        {orders.length > 0 ? (
          <table className="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Notes</th>
                <th>Total</th>
                <th>Product Name</th>
                <th>Action</th>                
              </tr>
            </thead>
            <tbody>
              {orders.map((order) => (
                <tr key={order.id}>
                  <td>{order.id}</td>
                  <td>{order.email}</td>
                  <td>{order.phone}</td>
                  <td>{order.address}</td>
                  <td>{order.notes}</td>
                  <td>{order.total}</td>
                  <td>{order.product}</td>
                  <td>
                    <button
                      className="btn btn-sm btn-outline-danger"
                      onClick={() => deleteOrder(order.id)}
                    >
                      Delete
                    </button>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        ) : (
          <p>No orders found.</p>
        )}
      </div>
    </div>
  );
}

export default Order;
