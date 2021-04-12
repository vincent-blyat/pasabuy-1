<template>
   <!--notification 2-->
            <div v-for="(notif,index) in allNotifications"
                :key="index">
              <div class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100"
                v-if="notif.type === sharedNotif">
                <img class="object-cover w-10 h-10 mx-1 rounded-full" src="https://ptetutorials.com/images/user-profile.png" alt="avatar">
                <p class="pl-1 mx-2 text-sm text-gray-800">
                <span class="font-bold" href="#">{{notif.data.sharer}}</span> 
                <span class ="font-semibold"> has shared your order</span><br>
                <router-link :to="'/orders/?postnum='+notif.data.postNumber" class="font-bold text-blue-500">View Order  </router-link>
                <span class="text-xs text-gray-500">  {{timestamp(notif.created_at)}}</span>
                </p>
              </div>
            </div>
         
</template>

<script>
import api from "../api"
import moment from "moment"
export default {
  data(){
    return{
      allNotifications:null,
     
      sharedNotif: "App\\Notifications\\SharedNotification",
    }
  },
  methods:{
      timestamp(date) {
      return moment(date).fromNow();
    }
  },
  mounted(){
    api.get('api/getNotifications').then((res)=>{
      this.allNotifications = res.data
    })
  },
}

</script>