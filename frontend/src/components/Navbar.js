import "./Navbar.css"
import {Link} from 'react-router-dom'

const NavBar = ({click}) => {
  return (
    <nav className="navbar">
        {/* logo */}
        <div className="navbar__logo">
            <h2 className="link"><Link to="/">KEVINS CATERING</Link></h2>
        </div>
        
        <ul className="navbar__links">
            <li>
                <Link to="/products" className="link">
                  CATALOGUS

                </Link>
            </li>
            <li>
                <Link to="/cart" className="cart__link">
                  <i className="fas fa-shopping-cart"></i>
                  <span>
                    WINKELWAGEN
                    <span className="cartlogo__badge">0</span>
                  </span>
                  
                </Link>
            </li>
            <li>
                <Link to="/over" className="link">
                  OVER

                </Link>
            </li>
            <li>
                <Link to="/contact" className="link">
                  CONTACT

                </Link>
            </li>
        </ul>

        <div className="hamburger__menu" onClick={click}>
          <div></div>
          <div></div>
          <div></div>
        </div>
    </nav>
  )
}

export default NavBar