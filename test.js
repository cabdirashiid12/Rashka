
// Read file name
// const fs = require('fs');

// fs.readFile('example.txt', 'utf8', (err, data) => {
//   if (err) throw err;
//   console.log(data);
// });
 

// white the file

// const fs = require('fs');

// const content = 'This is a sample text written using Node.js';

// fs.writeFile('output.txt', content, err => {
//   if (err) throw err;
//   console.log('File has been saved!');
// });



// Async-await and Promise all
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
