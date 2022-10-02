const redis=require("ioredis")
const client=new redis({
    port:6379,
    host:"127.0.0.1"
})

client.on("connnect",()=>console.log("redis client connected"))
client.on("error",(err)=>console.error("redis client error",err))

module.exports=client