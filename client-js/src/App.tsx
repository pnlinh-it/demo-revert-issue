import React, {useEffect} from 'react';
import './App.css';
import {EchoInstance} from "./EchoConfig";

function App() {
    useEffect(() => {

        EchoInstance.channel('presence-chats.1')
            .subscribed((data: any) => console.log(data))

    }, [])
    return (
        <div className="App">
        </div>
    );
}

export default App;
