Public Class Form1
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim a, b, c, hasil As Double
        a = Val(TextBox1.Text)
        b = Val(TextBox2.Text)
        c = Val(TextBox3.Text)
        hasil = (a + b + c) / 3
        TextBox4.Text = hasil
        MessageBox.Show(TextBox4.Text, "Hasil", MessageBoxButtons.OK, MessageBoxIcon.Information)
    End Sub
End Class
