import "./ProductScreen.css"
import { useState, useEffect } from "react"
import { useSelector, useDispatch } from "react-redux"
import { useParams } from "react-router-dom"
import { useNavigate } from "react-router-dom"

// Actions
import { getProductDetails } from "../redux/actions/productActions"
import { addToCart } from "../redux/actions/cartActions"

const ProductScreen = () => {
  let { id } = useParams()
  const navigate = useNavigate()


  const [qty, setQty] = useState(1)
  const dispatch = useDispatch()

  const productDetails = useSelector((state) => state.getProductDetails)
  const { loading, error, product } = productDetails

  useEffect(() => {
    if (product && id !== product._id) {
      dispatch(getProductDetails(id))
    }
  }, [dispatch, id, product])

  const addToCartHandler = () => {
    dispatch(addToCart(product._id, qty))
    navigate(`/cart`)
  }

  return (
    <div className="productscreen">
      {loading ? (
        <h2>Loading...</h2>
      ) : error ? (
        <h2>{error}</h2>
      ) : (
        <>
          <div className="productscreen__left">
            <div className="left__image">
              <img src={product.imageUrl} alt={product.name} />
            </div>
            <div className="left__info">
              <p className="left__name">{product.name}</p>
              <p>Prijs: €{product.price} per portie</p>
              <p>Descriptie: {product.description}</p>
            </div>
          </div>
          <div className="productscreen__right">
            <div className="right__info">
              <p>
                Prijs:
                <span>€{product.price} per portie</span>
              </p>
              <p>
                Aantal personen: 
                <select value={qty} onChange={(e) => setQty(e.target.value)}>
                    {[...Array(product.countInStock).keys()].map((x) => (
                      <option key={(x+1)*10} value={(x+1)*10}>
                        {(x+1)*10}
                      </option>
                    ))}
                  </select>
              </p>
              <p>
                <button type="button" onClick={addToCartHandler}>
                  Add To Cart
                </button>
              </p>
            </div>
          </div>
        </>
      )}
    </div>
  )
}

export default ProductScreen