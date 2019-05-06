import React from 'react';
import Main from './Containers/Main';
import Logo from './Assets/img/logo.png';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={Logo} className="Logo" alt="Logo"></img>
      </header>
      <Main />
    </div>
  );
}

export default App;
