!(function () {
	a = window; c = 'clarity';
	a[c] = function() {a[c].q.push(arguments)}; a[c].q = [];
	function sync() {
		new Image().src = "https://c.clarity.ms/c.gif";
	}
	"complete" == document.readyState ? sync() : window.addEventListener("load", sync);
	a[c]("metadata", function (e) {
		function n() {
			var n = ga.getAll();
			for (var o in n) {
				var s = n[o];
				if ("UA-76312851-1" === s.get("trackingId")) {
					s.set("dimension1", ["https://clarity.microsoft.com/ga", e.projectId, e.userId, e.sessionId].join("/")),
						s.send("event", { eventCategory: "Clarity", nonInteraction: !0, eventAction: e.sessionId });
					break;
				}
			}
		}
		try {
			ga && ga(n);
		} catch (e) {
			try {
				n();
			} catch (e) {}
		}
	});
	if (a[c].v || a[c].t) return a[c]("event", c, "dup.e4cr2dz36x");
	(a[c].t = !0),
		((t = document.createElement("script")).async = !0),
		(t.src = "https://www.clarity.ms/eus2-b/s/0.6.42/clarity.js"),
		(y = document.getElementsByTagName("script")[0]).parentNode.insertBefore(t, y),
		a[c]("start", {
			projectId: "e4cr2dz36x",
			upload: "https://e.clarity.ms/collect",
			expire: 365,
			cookies: ["_uetmsclkid", "_uetvid"],
			track: true,
			lean: false,
			content: true,
			extract: [
				0, 501, "window.navigator.hardwareConcurrency", 0, 502, "window.navigator.deviceMemory",
				0, 503, "window.navigator.platform", 0, 504, "window.navigator.maxTouchPoints",
				0, 505, "window.devicePixelRatio", 0, 506, "navigator.connection.downlink",
				0, 507, "navigator.connection.downlinkMax", 0, 508, "navigator.connection.effectiveType",
				0, 509, "navigator.connection.rtt", 0, 510, "screen.isExtended",
				0, 511, "navigator.cookieEnabled", 0, 512, "navigator.onLine",
				0, 513, "navigator.doNotTrack", 0, 514, "navigator.connection.saveData",
				0, 515, "navigator.vendor", 0, 516, "navigator.product",
				0, 517, "navigator.productSub", 0, 518, "navigator.pdfViewerEnabled",
				0, 519, "navigator.connection.type", 3, 1, ["4f509md79", "zjy56jaz", "4s4zm72hj"],
			],
			unmask: ["body"],
		}),
		a[c].q.unshift(a[c].q.pop());
})();