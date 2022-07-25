import "./HomeScreen.css"
import {Link} from 'react-router-dom'


const HomeScreen = () => {
  return (
    <div className="homescreen home">
      <h1>KEVINS CATERING</h1>
          <h3 className="home__text">WIJ ZIJN OPEN</h3>
          <Link to="/catalogus" className="home__button home__text">BESTEL ONLINE</Link>
    </div>
  )
}

export default HomeScreen