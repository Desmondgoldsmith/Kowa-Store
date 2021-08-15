const { log } = console
const addToCart = (prod_id, qty) => {
    // log(window.location.href)

    endpoint = window.location.href + "/controller/cart_controller.php?prod_id=" + prod_id + " & qty = " + qty + " & type = add ";
    // endpoint = "../controllers/cart_controller.php";
    // http: //localhost:81/dessy/store/web/
    // alert(endpoint)
    const trimed = endpoint.replace(/\s/g, '')


    // alert(trimed)

    $.ajax({
        type: "GET",
        url: trimed,
        success: data => {
            // alert(data)
            log(data)
                // let parsed = JSON.parse(data);
                // alert(typeof(parsed))
                // let a = [...parsed]
                // log(`Parsed : ${parsed[0]}`)

            // alert(data.message)
            // log(data)
            // let { status, message } = data
            // console.log(message);

        },
        error: () => alert("Error occurred")

    })
}