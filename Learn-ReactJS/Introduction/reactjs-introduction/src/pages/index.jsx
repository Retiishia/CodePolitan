import posts from "../components/post.json";
import Article from "../components/Article";

function Homepage() {
    return (
        <div>
            <h1>Homepage</h1>
            {posts.map((blog) => (
                <Article title={blog.title} date={blog.date} tags={blog.tags}/>
            ))}
        </div>
    );
}

export default Homepage;