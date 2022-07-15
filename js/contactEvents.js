const contactEvents = {
    hide: true,
    initialClick: function(){
        if (this.hide === true) {
            this.hide = false;
            this.showButtons();
        } else {
            this.hide = true;
            this.hideButtons();
        }
},

    hideButtons: function(){
        const wrapper = document.getElementById('edit_button_wrapper');
        wrapper.style.display = 'none';
    }, 

    showButtons: function() {
        const wrapper = document.getElementById('edit_button_wrapper');
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

    }
}
