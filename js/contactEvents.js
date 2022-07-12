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
    }
}
