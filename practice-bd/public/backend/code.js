

          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            icon: 'success', 
            showConfirmButton: false,
            timer: 3000 
      })
      if ($.isEmptyObject(data.error)) {
              
              Toast.fire({
              type: 'success',
              title: data.success, 
              })

      }else{
         
     Toast.fire({
              type: 'error',
              title: data.error, 
              })
          }

        // End Message
