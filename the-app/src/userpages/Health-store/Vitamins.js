import React, { useContext } from 'react';
import { Link } from 'react-router-dom';
import { ProductsContext } from './context';

function Vitamins() {
  const products = useContext(ProductsContext);

  return (
    <div className="box">
      <div className="container py-4">
        <div className="row">
          {products.map((product) => (
            <div className="col-md-4 col-sm-6 mb-4" key={product.id}>
              <div className="card h-100">
                <div className="card-img-container" style={{ height: '200px', overflow: 'hidden' }}>
                  <img
                    src={`http://127.0.0.1:8000/storage/products/${product.image}`}
                    alt={product.name}
                    className="card-img-top img-fluid"
                    style={{ objectFit: 'contain', height: '100%', width: '100%' }}
                  />
                </div>
                <div className="card-body d-flex flex-column justify-content-between">
                  <div>
                    <h5 className="card-title">{product.name}</h5>
                  </div>
                  <div>
                    <p className="card-text">Price: {product.price} &euro;</p>
                    <button className="btn btn-primary">
                      <Link to={`/viewProduct/viewP/${product.id}`} className="text-white text-decoration-none">
                        View Product
                      </Link>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

export default Vitamins;
