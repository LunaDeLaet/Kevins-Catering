import './CatalogusScreen.css'
import {Link} from 'react-router-dom'

const CatalogusScreen = () => {
  return (
    <div className='catalogus'>
      <Link to="/voorgerechten" className="link">
        VOORGERECHTEN
      </Link>
        
    </div>
  )
}

export default CatalogusScreen