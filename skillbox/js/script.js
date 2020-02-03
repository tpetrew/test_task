function validate() {
      
         if( document.form.name.value == "" ) {
            alert( "Укажите имя" );
            document.callback.name.focus() ;
            return false;
         }
         if( document.callback.email.value == "" ) {
            alert( "Заполните Email" );
            document.callback.email.focus() ;
            return false;
         } 
           if( document.callback.phone.value == "" ) {
            alert( "Укажите фамилию" );
            document.callback.lastname.focus() ;
            return false;
         }
         if( document.callback.agree.value == "-1" ) {
            alert( "Пожалуйста, нажмиет галочку, если согласны с ползьзовательским соглашением" );
            return false;
         }
         return( true );
      }