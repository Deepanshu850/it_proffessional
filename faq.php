 <?php include "header.php" ?>
 <style>
*,
*::after,
*::before {
    box-sizing: border-box;

    margin: 0;
    padding: 0;
}

p {
    line-height: 1.8;
}

body {
    min-width: 375px;

    font-family: "Poppins", sans-serif;

    background-color: #f1f1f1;
    color: #1a1a1a;
}

main {
    min-height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 1rem;
}

h1 {
    text-align: center;

    font-size: 1.2em;
    font-weight: 800;

    margin-top: 1em;
    margin-bottom: 1.8em;
}

section.faq {


    width: 100%;
    max-width: 540px;
    border-radius: 12px;
    padding: 2em;

    background-color: white;
    box-shadow: 2px 2px 15px 4px rgba(0, 0, 0, 0.2);
}

/* ===================== */
/* ===================== */
/* Code Here ↓ */

.faq-container {
    display: grid;
    gap: 1em;
}

.faq-header {
    padding: 1.2em 1em;

    font-weight: 600;

    background-color: whitesmoke;

    user-select: none;
    cursor: pointer;
}

.faq-content {
    padding: 1em;
}






















/* Code Here ↑ */
/* ===================== */
/* ===================== */
 </style>
 <main>

     <section class="faq">
         <h1>Frequently Asked Questions</h1>

         <div class="faq-container">
             <details class="faq-box" open>
                 <summary class="faq-header">
                     Sed accumsan nulla ut dui hendrerit?
                 </summary>
                 <div class="faq-content">
                     <p>
                         Nullam quis justo in lectus consequat
                         facilisis ac et nibh. Fusce faucibus augue
                         id nibh vestibulum nec.
                     </p>
                 </div>
             </details>

             <details class="faq-box">
                 <summary class="faq-header">
                     Suspendisse volutpat nunc vestibulum?
                 </summary>
                 <div class="faq-content">
                     <p>
                         Sed accumsan nulla ut dui hendrerit, et
                         cursus risus placerat. Praesent accumsan
                         lectus vitae suscipit condimentum.
                     </p>
                 </div>
             </details>

             <details class="faq-box">
                 <summary class="faq-header">
                     Mauris ultrices aliquam lacinia?
                 </summary>
                 <div class="faq-content">
                     <p>
                         Integer tristique augue diam, eget ultrices
                         nisi vehicula a. Curabitur vulputate arcu
                         nec orci laoreet iaculis.
                     </p>
                 </div>
             </details>
         </div>
     </section>

 </main>
 <footer>

 </footer><?php include "footer.php" ?>