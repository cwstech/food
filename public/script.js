$(document).ready(function () {
  // const apiKey = "AIzaSyCao5jDgL3iJIQalm0ny960uf5OcT3YA-E";
  const apiKey = "AIzaSyDkzTdRzQlr9RFmqqH_ac0bTLb3N_0AKy4";

  function translatePage(languageCode) {
    const url = `https://translation.googleapis.com/language/translate/v2?key=${apiKey}`;
    const content = $("html").html();

    $.ajax({
      url,
      method: "POST",
      contentType: "application/json",
      data: JSON.stringify({
        q: content,

        target: languageCode,
      }),
      success: function (response) {
        $("html").html(response.data.translations[0].translatedText);
      },
      error: function (error) {
        console.error("Translation error:", error);
      },
    });
  }

  // Handle language selection
  $(".choose-language-page__lang").on("click", function () {
    const languageCode = $(this).text().trim().toLowerCase();
    translatePage(languageCode);
  });
});

// function changeLanguage(language) {
//   const textElements = document.querySelectorAll(".choose-language-page__lang");
//   textElements.forEach((element) => {
//     translateText(element.textContent, language)
//       .then((translation) => {
//         element.textContent = translation;
//       })
//       .catch((error) => {
//         console.error("Translation error:", error);
//       });
//   });
// }

// async function translateText(text, targetLanguage) {
//   const apiKey = "YOUR_GOOGLE_TRANSLATE_API_KEY";
//   const apiUrl = `https://translation.googleapis.com/language/translate/v2?key=${apiKey}&target=${targetLanguage}&q=${encodeURIComponent(
//     text
//   )}`;

//   try {
//     const response = await fetch(apiUrl);
//     const data = await response.json();
//     return data.data.translations[0].translatedText;
//   } catch (error) {
//     throw new Error("Translation failed");
//   }
// }
