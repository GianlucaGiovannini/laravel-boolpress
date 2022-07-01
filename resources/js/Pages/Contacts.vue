<template>
    <div class="page">
        <div class="p-5 bg-dark text-light">
            <div class="container d-flex">
                <img src="https://www.cartonionline.com/wordpress/wp-content/uploads/2021/05/Demon-Slayer-Kimetsu-no-Yaiba-The-Movie-Mugen-Train-1000x600.jpg"
                    alt="" />
                <div class="ms-3">
                    <h1 class="display-3">Contact Me</h1>
                    <p class="lead">Jumbo helper text</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="contents py-5">


                <vue-form method="POST" action="/contact-form">
                    <div class="mb-3 d-flex flex-column">
                        <label for="" class="form-label">Full Name</label>
                        <input type="text" name="full_name" id="full_name" class="Your Name" placeholder="Mario Rossi"
                            aria-describedby="FullNameHelper" />
                        <small id="FullNameHelper" class="text-muted">type your name</small>
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="Your email" placeholder="mariorossi@email.it"
                            aria-describedby="EmailHelper" />
                        <small id="EmailHelper" class="text-muted">type your email</small>
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <label for="" class="form-label">Subject</label>
                        <input type="text" name="subject" id="subject" class="Your subject" placeholder="Subject"
                            aria-describedby="SubjectHelper" />
                        <small id="SubjectHelper" class="text-muted">type subject</small>
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </vue-form>
            </div>
        </div>
    </div>
</template>



<script>
import VueForm from '../components/VueForm.vue'
export default {
    neme: "Contacts",
    components: {
        VueForm
    }
};
</script>

<style lang="scss" scoped>
img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
}
</style>

