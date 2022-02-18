const button = document.querySelector('#prova');

button.addEventListener('click', async (e) => {
    const res_otp = await fetch("index.php", { 
        method: "POST"
    });
    resp_otp = await res_otp.text();
    console.log(resp_otp);
})