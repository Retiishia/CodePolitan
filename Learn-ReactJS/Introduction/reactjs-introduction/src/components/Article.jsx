const Status = ({isNew}) => {
    return isNew && <span>-- NEW!!!</span>
};

const NewArticle = () => {
    return <span>- NEW</span>
}

function Article (props) {
    return (
        <>
            <h3>{props.title}</h3>
            <small>
                Date : {props.date}, tags : {props.tags.join(", ")}{" "}
                <Status isNew={props.isNew}/>
                {props.isNew && <NewArticle/>}
            </small>
        </>
    )
}
export default Article; 

