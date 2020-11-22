/**
 * Follow This link first:
 * https://fontawesome.com/cheatsheet
 * Then enter following code in console panel
 * will show a download dialog to download as json format
 * :) :) :)
 */
(function () {
  let icons = document.querySelectorAll('.icon');
  let data = Array.from(icons).map(icon => {
    return {
      name: icon.querySelector('.icon-name').textContent,
      unicode: icon.querySelector('.icon-unicode').textContent,
    };
  });

  const blob = new Blob([JSON.stringify(data, null, 2)], {type: 'application/json'});
  const url = URL.createObjectURL(blob);
  const link = document.createElement('a');
  link.href = url;
  link.download = "font-awesome-db";
  document.body.appendChild(link);
  link.click();
})();
