Public Class Form1
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim angka1, angka2, hasil As Double
        angka1 = Val(TextBox1.Text)
        angka2 = Val(TextBox2.Text)
        hasil = angka1 + angka2
        TextBox3.Text = hasil
        MessageBox.Show(TextBox3.Text, "Hasil pertambahannya adalah", MessageBoxButtons.OK, MessageBoxIcon.Information)
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        Dim angka1, angka2, hasil As Double
        angka1 = Val(TextBox1.Text)
        angka2 = Val(TextBox2.Text)
        hasil = angka1 - angka2
        TextBox3.Text = hasil
        MessageBox.Show(TextBox3.Text, "Hasil Pengurangannya adalah", MessageBoxButtons.OK, MessageBoxIcon.Information)
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        Dim angka1, angka2, hasil As Double
        angka1 = Val(TextBox1.Text)
        angka2 = Val(TextBox2.Text)
        hasil = angka1 / angka2
        TextBox3.Text = hasil
        MessageBox.Show(TextBox3.Text, "Hasil Pembagiannya adalah", MessageBoxButtons.OK, MessageBoxIcon.Information)
    End Sub

    Private Sub Button4_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button4.Click
        Dim angka1, angka2, hasil As Double
        angka1 = Val(TextBox1.Text)
        angka2 = Val(TextBox2.Text)
        hasil = angka1 * angka2
        TextBox3.Text = hasil
        MessageBox.Show(TextBox3.Text, "Hasil Perkaliannya adalah", MessageBoxButtons.OK, MessageBoxIcon.Information)
    End Sub

    
End Class
