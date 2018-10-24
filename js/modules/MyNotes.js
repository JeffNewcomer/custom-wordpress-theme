import $ from 'jquery';

class MyNotes {
  constructor() {
    this.events();
  }

  events() {
    $(".delete-note").on("click", this.deleteNote);
  }

  //methods will go here
  deleteNote() {
    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader('X-WP-Nonce', universityData.nonce);
      },
      url: universityData.root_url + '/wp-json/wp/v2/note/110',
      type: 'DELETE',
      success: (response) => {
        console.log("congrats");
        console.log(response);
      },
      error: (response) => {
        console.log("sorry");
        console.log(response);
      }
    });
  }
}

export default MyNotes;
