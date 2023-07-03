document.addEventListener("DOMContentLoaded", () => {
  const check_input = document.querySelector("#check_input");
  check_input.addEventListener("click", ()=>{
    if (!document.board_form.subject.value) {
      alert("제목을 입력하세요!");
      document.board_form.subject.focus();
      return;
    }
    if (!document.board_form.content.value) {
      alert("내용을 입력하세요!");
      document.board_form.content.focus();
      return;
    }
    document.board_form.submit();
  });
});