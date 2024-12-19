import axios from 'axios';

// Creating a custom Axios instance
const Api = axios.create({
    baseURL: 'http://localhost:8000/api/blogs',  // Replace with your actual backend URL
    // Optionally, if you need headers like Authorization, you can add them
    // headers: {
    //     'Content-Type': 'application/json',
    //     // Add your custom headers if needed, e.g., Authorization for token-based authentication
    // },
});

export default Api;
