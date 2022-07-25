import './CatalogusScreen.css'
import { useDebugValue, useEffect } from 'react'
import { useSelector, useDispatch } from 'react-redux'

// components
import Product from '../components/Product'

// actions
import { getProducts as listProducts } from '../redux/actions/productActions'
import { http2 } from 'browserify/lib/builtins'


const Voorgerechten = () => {

    const dispatch = useDispatch()

    const getProducts = useSelector(state => state.getProducts)
    const { products, loading, error } = getProducts

    useEffect(() => {
        dispatch(listProducts())
    }, [dispatch])


  return (
    <div className='voorgerechten'>
        {loading ? <h2>Loading...</h2> : error ? <h2>{error}</h2> : products.map(product => (
            <Product productId={product._id} key={product._id} name={product.name} price={product.price} description={product.description} imageUrl={product.imageUrl} />
        ))}
    </div>
  )
}

export default Voorgerechten