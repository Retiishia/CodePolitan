setTimeout(() => {
    document.body.style.backgroundColor = 'red';

    setTimeout(() => {
        document.body.style.backgroundColor = 'green';
     setTimeout(() => {
        document.body.style.backgroundColor = 'blue';
        setTimeout(() => {
            document.body.style.backgroundColor = 'black';
        
            }, 1000);
        }, 1000);
    }, 1000);
}, 1000);



