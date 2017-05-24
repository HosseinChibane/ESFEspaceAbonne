<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a403f214285bfff0ac6397b79a894b570f6f4bcb3896d6536d5f99c4e1ffc65d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d85354df87151e4cd12e30247a689373c810ec6c2fcc24c67a293b80a4c4dd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85354df87151e4cd12e30247a689373c810ec6c2fcc24c67a293b80a4c4dd2c->enter($__internal_d85354df87151e4cd12e30247a689373c810ec6c2fcc24c67a293b80a4c4dd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_59cf252328fef802fb671b4ecc59ff58aada6c2b781451a7ca3f4fdda82a0c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cf252328fef802fb671b4ecc59ff58aada6c2b781451a7ca3f4fdda82a0c7e->enter($__internal_59cf252328fef802fb671b4ecc59ff58aada6c2b781451a7ca3f4fdda82a0c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d85354df87151e4cd12e30247a689373c810ec6c2fcc24c67a293b80a4c4dd2c->leave($__internal_d85354df87151e4cd12e30247a689373c810ec6c2fcc24c67a293b80a4c4dd2c_prof);

        
        $__internal_59cf252328fef802fb671b4ecc59ff58aada6c2b781451a7ca3f4fdda82a0c7e->leave($__internal_59cf252328fef802fb671b4ecc59ff58aada6c2b781451a7ca3f4fdda82a0c7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
