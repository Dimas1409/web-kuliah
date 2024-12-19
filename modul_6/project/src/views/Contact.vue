<template>
  <div>  
    <main>
      <section class="contact-section">
        <div class="contact-text">
          <h1>Contact Me!</h1>
          <p>Let's Get in Touch</p>
          <p class="subtext">
            Every Moment Matters – Let’s Capture Yours! Whether it’s a special event or a personal project, I'm just a
            message away. Let's make memories that last!
          </p>

          <form @submit.prevent="submitForm" class="contact-form">
            <label for="name">Your Name</label>
            <input type="text" id="name" v-model="formData.name" required />

            <label for="email">Email Address</label>
            <input type="email" id="email" v-model="formData.email" required />

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" v-model="formData.phone" required />

            <label for="message">Your Messages</label>
            <textarea id="message" v-model="formData.message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
          </form>
        </div>

        <div class="contact-image">
          <img src="../assets/images/contact.jpg" alt="Contact Image" />
        </div>
      </section>
    </main>
  </div>
</template>

<script>
import axios from 'axios'; // Import axios

export default {
name: "Contact",
data() {
  return {
    formData: {
      name: "",
      email: "",
      phone: "",
      message: "",
    },
  };
},
methods: {
  async submitForm() {
    try {
      // Send form data to your Laravel API
      const response = await axios.post('http://localhost:8000/api/contacts', this.formData);
      
      // If the response is successful, show success message
      console.log(response.data);
      alert("Message sent successfully!");
      
      // Reset form fields
      this.formData = {
        name: "",
        email: "",
        phone: "",
        message: "",
      };
    } catch (error) {
      console.error("Error sending message:", error);
      alert("There was an issue sending your message. Please try again.");
    }
  },
},
};
</script>

<style src="../assets/CSS/Contact.css"></style>

  