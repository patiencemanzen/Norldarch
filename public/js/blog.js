function blogLikes(obj) {
    let blogId = obj.id;

    fetch('http://127.0.0.1:8000/api/like', {
        method: 'POST',
        headers: {
          Accept: 'application.json',
        },
        body: JSON.stringify({
            blod_id: blogId,
        }),
        Cache: 'default'
    }).then(response => {
        //handle response
        console.log(response);
    }).then(data => {
        //handle data
        console.log(data);
    }).catch(error => {
        //handle error
        console.log(data);
    });
}
