Public Class Form1
    Public hrgmakan, hrgminum As Integer
    Private Sub ComboBox1_SelectedIndexChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles ComboBox1.SelectedIndexChanged
        Select Case ComboBox1.Text
            Case "Nasi Uduk"
                Label2.Text = "Rp.10.000"
                hrgmakan = 10000
            Case "Lontong Sayur"
                Label2.Text = "Rp.8.000"
                hrgmakan = 8000
            Case "Lontong Kacang"
                Label2.Text = "Rp.8.000"
                hrgmakan = 8000
            Case "Lupes"
                Label2.Text = "Rp.5.000"
                hrgmakan = 5000
        End Select
    End Sub

    Private Sub ComboBox2_SelectedIndexChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles ComboBox2.SelectedIndexChanged
        Select Case ComboBox2.Text
            Case "Teh Manis"
                Label4.Text = "Rp.5.000"
                hrgminum = 5000
            Case "Kopi"
                Label4.Text = "Rp.5.000"
                hrgminum = 5000
            Case "Air Putih"
                Label4.Text = "Rp.2.000"
                hrgminum = 2000
        End Select
    End Sub

    Public Sub New()
        InitializeComponent()
        ComboBox2.Visible = False
        Label3.Visible = False
        Label4.Visible = False
    End Sub

    Private Sub CheckBox1_CheckedChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles CheckBox1.CheckedChanged
        If CheckBox1.Enabled = False Then
            ComboBox2.Visible = False
            Label3.Visible = False
            Label4.Visible = False
        ElseIf CheckBox1.Enabled = True Then
            ComboBox2.Visible = True
            Label3.Visible = True
            Label4.Visible = True
        End If
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim prsmakan, prsminum, hitung As Integer
        prsmakan = TextBox1.Text
        prsminum = TextBox2.Text
        hitung = (hrgmakan * prsmakan) + (hrgminum * prsminum)
        Label7.Text = "Rp." & hitung.ToString
        MessageBox.Show(TextBox1.Text & " " & ComboBox1.Text & " & " & TextBox2.Text & " " & ComboBox2.Text & " = " & Label7.Text, "HARGA", MessageBoxButtons.OK, MessageBoxIcon.Information)
    End Sub
End Class
