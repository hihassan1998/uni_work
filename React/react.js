// Top 50 react interview prep frågor:


/* #3 Skillnad mellan classbaserad komponent och funktionell komponent inom React

Två olika sätt att definera komponenter i React
React.Component
render()
this.state
compoentDidMount
componentDidUpdate
componentWillUnmount */

class MyComponent extends React.Component {
    constructor(props) {
        super(props);
        this.state = { count: 0 };
    }
    render() {
        return <div>{this.state.count}</div>;
    }
}
/*
Funktionell Komponent: 
Enkel Js funktioner som tar in prop och returnerar JSx
Originallt stateless/tillståndslös men med React Hooks
såsom useEffect  & useState kan hantera stae och side-effekter
*/
function MyComponent(Props) {
    const [count, setCount] = React.useState(0);
    return <div>{count}</div>;
}

/*
5. Vad ärJSX och varför använder vi det inom React? 
JSc är Js och XML i.e; html+js

*/ 