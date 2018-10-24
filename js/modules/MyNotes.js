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
    alert("you clicked delete");
  }
}

export default MyNotes;
