import './App.css';
import {useState} from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'


// Screens
import HomeScreen from "./screens/HomeScreen"
import ProductScreen from "./screens/ProductScreen"
import CartScreen from "./screens/CartScreen"
import CatalogusScreen from "./screens/CatalogusScreen"
import Voorgerechten from "./screens/Voorgerechten"

// Components
import Navbar from "./components/Navbar"
import Backdrop from "./components/Backdrop"
import SideDrawer from "./components/SideDrawer"



function App() {

  const [sideToggle, setSideToggle] = useState(false)

  return (
    <Router>
      <Navbar click={() => setSideToggle(true)} />
      <SideDrawer show={sideToggle} click={() => setSideToggle(false)} />
      <Backdrop  show={sideToggle} click={() => setSideToggle(false)} />
      <main className='app'>
        <Routes>
          <Route exact path="/" element={<HomeScreen />} />
          <Route exact path="/products/:id" element={<ProductScreen />} />
          <Route exact path="/cart" element={<CartScreen />} />
          <Route exact path="/products" element={<CatalogusScreen />} />
          <Route exact path="/products/voorgerechten" element={<Voorgerechten />} />
        </Routes>
      </main>
    </Router>
  );
}

export default App;
