<?php
if ($text === "/help" && $chatType === "private") {
	try {
		sendMessage($chatId, "⁉️ [ <code>HELP</code> ]\nDo you need help? Here you can find all the information you need to know about the game.\n\n📚 <b>Guides</b>\n• <a href='https://t.me/this-is-an-example-link'>First Steps</a> – Learn how to get started in “Noctis Imperivm” and make the most of your adventure.\n• <a href='https://t.me/this-is-an-example-link'>Basic</a> – Understand the core mechanics of the game and essential gameplay tips.\n• <a href='https://t.me/this-is-an-example-link'>Advance</a> – Dive into deeper systems and elevate your gameplay to the next level.\n\n⚖️ <b>Terms of Service</b>\nReview our <a href='https://t.me/this-is-an-example-link'>Terms of Service</a> to understand your rights and obligations as a player.\n\n🔐 <b>Privacy Policy</b>\nRead our <a href='https://t.me/this-is-an-example-link'>Privacy Policy</a> to see how we protect your personal information and your rights.\n\n>> <i>Feel free to contact our</i> <b>support volunteers</b> <i>(</i><b>SV</b><i>)</i> <i>anytime if you need further assistance or have any questions. We’re always here to help!</i>", true, false, false, '&reply_markup={"inline_keyboard":[[{"text":"📢 Community","url":"https://t.me/this-is-an-example-link"},{"text":"🔔 Updates","url":"https://t.me/this-is-an-example-link"}]],"resize_keyboard":true}');
	} catch (Exception $exception) {
		systemLogs($pdo, $userId, "ERROR", $exception->getMessage(), $text);
		exit;
	}
}
