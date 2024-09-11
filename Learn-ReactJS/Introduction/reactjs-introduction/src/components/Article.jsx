
function Article (props) {
    const {title} = props
    const {date} = props
    const {tags} = props
    return (
        <>
            <h3>{title}</h3>
            <small>Date : {date}, tags : {tags.join(", ")}</small>
        </>
    )
}
export default Article; 

