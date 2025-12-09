
// function fetchPostData() {
//     return new Promise(resolve =>{
//         setTimeout(() =>{
//             resolve("post Data fetched");
//         },2000)
//     })
// }

// function fetchCommentData(){
//      return new Promise(resolve =>{
//         setTimeout(() =>{
//             resolve("comment Data fetched");
//         },3000)
//     })
// }


// async function getBlockata() {
//     try{
//         console.log("fetching block  data....");
//         const [postData, CommentData]=await Promise.all([
//             fetchPostData(),
//             fetchCommentData()
//         ]);
//         console.log(postData);
//         console.log(CommentData);
//         console.log("fetch complete ")
       
//     }catch(error){
//         console.log("Error  fetchng  block data", error);
//     }
    
// }

// getBlockata();
