<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4600fb806b3f66ad98a5c5c49beb9783cbf18bf9a4d36f3f305f33a097f870e extends Twig_Template
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
        $__internal_113dcf80a5cee2b69af47c7bd807af19891e85cbcedd5fe41fc4f60efb53e65f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113dcf80a5cee2b69af47c7bd807af19891e85cbcedd5fe41fc4f60efb53e65f->enter($__internal_113dcf80a5cee2b69af47c7bd807af19891e85cbcedd5fe41fc4f60efb53e65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2a742e3a933ee1d6e978f15a97480aee4219315653f4eb846242ad653c192b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a742e3a933ee1d6e978f15a97480aee4219315653f4eb846242ad653c192b29->enter($__internal_2a742e3a933ee1d6e978f15a97480aee4219315653f4eb846242ad653c192b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_113dcf80a5cee2b69af47c7bd807af19891e85cbcedd5fe41fc4f60efb53e65f->leave($__internal_113dcf80a5cee2b69af47c7bd807af19891e85cbcedd5fe41fc4f60efb53e65f_prof);

        
        $__internal_2a742e3a933ee1d6e978f15a97480aee4219315653f4eb846242ad653c192b29->leave($__internal_2a742e3a933ee1d6e978f15a97480aee4219315653f4eb846242ad653c192b29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
