<template>
  <div>
      hello this is login page
      <br>
      ------------------------------------------------
    <GoogleLogin
      :params="params"
      :renderParams="renderParams"
      :onSuccess="onSuccess"
      :onFailure="onFailure"
    ></GoogleLogin>
  </div>
</template>

<script>
import GoogleLogin from "vue-google-login";

export default {
  name: "App",
  data() {
    return {
      params: {
        client_id:
          "971929386601-nr1h5oi81ve8jna4gvcoud318k6hs8lq.apps.googleusercontent.com",
      },
      // only needed if you want to render the button with the google ui
      renderParams: {
        width: 250,
        height: 50,
        longtitle: true,
      },
    };
  },
  components: {
    GoogleLogin,
  },
  methods: {
    onSuccess(googleUser) {
      console.log(googleUser);

      // This only gets the user information: id, name, imageUrl and email
      console.log(googleUser.getBasicProfile());
    },
    onFailure(errorData) {
      console.log("ErrorMessage:" + errorData);
    },
  },
};
</script>

<style></style>
