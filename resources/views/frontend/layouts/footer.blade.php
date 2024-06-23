 <!-- footer copyright -->
 <div class="footer-copyright text-center pt-25 pb-25">
    <span>© 2024 All Rights Reserved by <a href="Ali" target="_blank"
            rel="noopener noreferrer">Ali Abbas</a>.</span>
</div>
</div>
</div>
<!-- about-page-end -->
</div>
</div>
</div>

<!-- JS here -->
<script src="frontend/js/jquery.min.js"></script>
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="frontend/js/swipper-bundle.min.js"></script>
<script src="frontend/js/jquery.meanmenu.min.js"></script>
<script src="frontend/js/wow.min.js"></script>
<script src="frontend/js/odometer.min.js"></script>
<script src="frontend/js/appear.min.js"></script>
<script src="frontend/js/main.js"></script>
<script>
document.getElementById('download-cv-btn').addEventListener('click', function (event) {
event.preventDefault();
fetch('{{ route('download.cv') }}')
.then(response => {
if (!response.ok) {
throw new Error('Network response was not ok');
}
return response.blob();
})
.then(blob => {
const url = window.URL.createObjectURL(blob);
const a = document.createElement('a');
a.style.display = 'none';
a.href = url;
a.download = 'Ali_Abbas_CV.pdf'; // The filename to be used by the browser
document.body.appendChild(a);
a.click();
window.URL.revokeObjectURL(url);
})
.catch(error => console.error('Error downloading the file:', error));
});
</script>
</body>
</html>
