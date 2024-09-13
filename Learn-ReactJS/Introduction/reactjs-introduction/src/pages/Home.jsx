import { useState } from "react";
import postsData from "../components/post.json";
import Article from "../components/Article";
import Search from "../components/Search";

function Homepage() {
    const [posts, setPosts] = useState(postsData);
    const [ count, setCount] = useState(0);

    const ValueChange = (value) => {
        const filteredPosts = postsData.filter((item) => 
            item.title.includes(value)
            || item.date.includes(value)
        );
        setPosts(filteredPosts);
        setCount(filteredPosts.length);
        };
        
    
    return (
        <>
        <div>
            <h1>Simple Page</h1>
            <Search Changing={ValueChange} count={count}/>
            {posts.map((props, index) => (
                <Article { ...props} key={index}/>
            ))}
        </div>
        </>
    );
}

export default Homepage;