const hello = async () => {
    // return 'Hello World';
    throw "Gak Tau Jangan Tanya Saya"
}

hello()
    .then((result) => {
    console.log('response', result);
})
    .catch((error) => {
    console.log('error', error);
})
