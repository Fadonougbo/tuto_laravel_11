

 const token="eyJpdiI6InRKS3UzSENIQVpFcnJaM05mcG5sbFE9PSIsInZhbHVlIjoibTZyZWMzNFJFckNscDcwdFlad3VZbzkzOG1FQWYzTlNSSWdVR1FHQnNZRU5xMVVpSnV3eW5YK2hhb0VVcWRsMnpPN2RXQnR3OG9PWWc4UWF0R255c1ByZUZLWnVlOEZYRWdKN09FL1dQc3grU1hXcnNnL0QrSWtRem5USHhGV20iLCJtYWMiOiJkNjBmM2QyNDRmOGNmMjVjY2QzNzUwYjhjOWE1ZDNhY2E3YzJkMmEzYzM3YTU4OWYxNjFjOWU3YmFiN2FmMGUwIiwidGFnIjoiIn0%3D"

  fetch("/sanctum/csrf-cookie").then((res)=>{
   
}) 
  
fetch("/login",
    {
        method:"POST",
        body: JSON.stringify({email:"test2@test.com",password:"12345678"})
    }).then((res)=>{
    console.log(res.json());
    return res.json();
}).then(data=>console.log(data))


fetch("http://localhost:8000/test/api/1").then(res=>res.json()).then(data=>console.log(data))

fetch("api/user").then(res=>res.json()).then(data=>console.log(data))
fetch("api/doe").then(res=>res.json()).then(data=>console.log(data))  

/* import { default as axios } from "axios";

fetch("/sanctum/csrf-cookie").then(res=>{
    console.log(res.headers.has("XSRF-TOKEN"));
    const map=new Map(res.headers.entries())
    console.log(Object.fromEntries(map.entries()));
})

axios.get('/sanctum/csrf-cookie').then(res=>console.log(res.headers)) */

/* const token="eyJpdiI6InRKS3UzSENIQVpFcnJaM05mcG5sbFE9PSIsInZhbHVlIjoibTZyZWMzNFJFckNscDcwdFlad3VZbzkzOG1FQWYzTlNSSWdVR1FHQnNZRU5xMVVpSnV3eW5YK2hhb0VVcWRsMnpPN2RXQnR3OG9PWWc4UWF0R255c1ByZUZLWnVlOEZYRWdKN09FL1dQc3grU1hXcnNnL0QrSWtRem5USHhGV20iLCJtYWMiOiJkNjBmM2QyNDRmOGNmMjVjY2QzNzUwYjhjOWE1ZDNhY2E3YzJkMmEzYzM3YTU4OWYxNjFjOWU3YmFiN2FmMGUwIiwidGFnIjoiIn0%3D"

import { default as axios } from "axios";

axios.get('/sanctum/csrf-cookie').then(res=>{
    console.log(res.data);
    axios.post("/login",
        {
           email:"test2@test.com",password:"12345678"
        },{headers:{"X-XSRF-TOKEN":token}}).then(res=>console.log())
}) */