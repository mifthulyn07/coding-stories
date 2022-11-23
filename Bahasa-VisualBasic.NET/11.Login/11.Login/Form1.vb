Imports System.Data.OleDb
Public Class Form1

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        koneksi()
        cmd = New OleDbCommand("select * from pemakai where nama_pmk = '" & TextBox1.Text & "' and password_pmk = '" & TextBox2.Text & "'", conn)
        rd = cmd.ExecuteReader()
        rd.Read()
        If rd.HasRows Then
            Me.Visible = False
            Form2.Show()
            Form2.ToolStripStatusLabel1.Text = rd.GetString(0)
            Form2.ToolStripStatusLabel2.Text = rd.GetString(1)
            Form2.ToolStripStatusLabel3.Text = rd.GetString(2)
            If Form2.ToolStripStatusLabel3.Text <> "ADMINISTRATOR" Then
                Form2.PemakaiToolStripMenuItem.Enabled = False
            Else
                Form2.PemakaiToolStripMenuItem.Enabled = True
            End If
        Else
            MsgBox("login salah, Periksa Kembali")
            TextBox1.Focus()
        End If
    End Sub

    Private Sub TextBox1_KeyPress(ByVal sender As Object, ByVal e As System.Windows.Forms.KeyPressEventArgs) Handles TextBox1.KeyPress
        If e.KeyChar = Chr(13) Then TextBox2.Focus()
    End Sub

    Private Sub TextBox2_KeyPress(ByVal sender As Object, ByVal e As System.Windows.Forms.KeyPressEventArgs) Handles TextBox2.KeyPress
        If e.KeyChar = Chr(13) Then Button1.Focus()
    End Sub


    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs)
        TextBox1.Clear()
        TextBox2.Clear()
    End Sub

    Private Sub Form1_Load(sender As System.Object, e As System.EventArgs) Handles MyBase.Load

    End Sub
End Class
