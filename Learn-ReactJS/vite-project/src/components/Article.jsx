function Article() {
    const name = "Farhan Aziz"
    const titles = ["React", "Vue", "Angular"]

    return (
    <>
        <h1>Article Component</h1>
        <div>{name}</div>
        <div>
            {titles.map((title) => {
                return (
                <>
                <div>{title}</div>
                <div>{title}</div>
                </>
            );
            })}
            </div>
    </>
    );
}
export default Article