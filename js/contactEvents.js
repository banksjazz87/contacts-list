const contactEvents = {
    hide: true,
    currentButtonId: "",
    allContacts: "",

    hideButtons: function(){
        const wrapper = document.getElementById(this.currentButtonId);
        wrapper.style.display = 'none';
    }, 

    showButtons: function() {
        const wrapper = document.getElementById(this.currentButtonId);
        wrapper.style.display = 'flex';
    },

    showEditBox: function() {
        const wrapper = document.getElementById('edit_box_wrapper');
        const body = document.querySelector('body');
        wrapper.style.display = 'flex';
      
    },

    hideEditBox: function() {
        const wrapper = document.getElementById('edit_box_wrapper');
        const body = document.querySelector('body');
        body.style.opacity = '1';
        wrapper.style.display = 'none';

    },

    getNumbersFromId: function(str) {
        let num = "";

        for (let i = 0; i < str.length; i++) {
            if (!isNaN(parseInt(str[i]))) {
                num = num + str[i]
            }
        }
        return num;
    }, 
    
    displayEditButtons: function(e) {
        e.preventDefault();
        const currentId = e.target.id;
        this.currentButtonId = "edit_button_wrapper_" + this.getNumbersFromId(currentId);

        this.showButtons();     
    },



}
