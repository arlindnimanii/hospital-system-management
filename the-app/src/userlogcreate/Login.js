import React, { useState } from 'react';

const Login = () => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  

  const handleSubmit = async (e) => {
    e.preventDefault();

    const userData = {
      email: email,
      password: password,
    };

    try {
      const response = await fetch('http://127.0.0.1:8000/api/login', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(userData),
      });

      const data = await response.json();
      console.log(data);

      if (response.ok) {
        const { userType } = data;
        const loginButtonName = e.nativeEvent.submitter.name;

        if (userType === '1' && loginButtonName === 'loginButton') {
          localStorage.setItem('user', JSON.stringify(data));
          window.location.href = '/doctorpages/doctorhomepage';
        } else if (userType === '0' && loginButtonName === 'loginButton') {
          localStorage.setItem('user', JSON.stringify(data));
          window.location.href = '/userpages/UserDashboard';
        }
      } else {
        
      }
    } catch (error) {
      console.error(error);
      
    }
  };

  return (
    <div>
      <div className="container py-5">
        <div className="row justify-content-center">
          <div className="col-lg-6">
            <div className="card">
              <div className="card-body">
                <h2 className="card-title mb-4">Login</h2>
                <form onSubmit={handleSubmit}>
                  <div className="form-group">
                    <label htmlFor="email">Email:</label>
                    <input
                      type="email"
                      id="email"
                      value={email}
                      onChange={(e) => setEmail(e.target.value)}
                      className="form-control"
                      required />
                  </div>

                  <div className="form-group">
                    <label htmlFor="password">Password:</label>
                    <input
                      type="password"
                      id="password"
                      value={password}
                      onChange={(e) => setPassword(e.target.value)}
                      className="form-control"
                      required  />
                  </div>

                  <button type="submit" name="loginButton" className="btn btn-primary">
                    Login
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Login;
