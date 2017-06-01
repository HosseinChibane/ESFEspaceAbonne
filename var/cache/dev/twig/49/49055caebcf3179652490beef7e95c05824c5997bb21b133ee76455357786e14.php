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
        $__internal_8d7016e43980fc3d7ac0cea995bada45d5ca76c35125b61a31a69c8725bcacd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7016e43980fc3d7ac0cea995bada45d5ca76c35125b61a31a69c8725bcacd2->enter($__internal_8d7016e43980fc3d7ac0cea995bada45d5ca76c35125b61a31a69c8725bcacd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bb02d0bc85e0c635443cc5f1305aa00a567ac2866dbfc2caada4f2d4f8f23433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb02d0bc85e0c635443cc5f1305aa00a567ac2866dbfc2caada4f2d4f8f23433->enter($__internal_bb02d0bc85e0c635443cc5f1305aa00a567ac2866dbfc2caada4f2d4f8f23433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8d7016e43980fc3d7ac0cea995bada45d5ca76c35125b61a31a69c8725bcacd2->leave($__internal_8d7016e43980fc3d7ac0cea995bada45d5ca76c35125b61a31a69c8725bcacd2_prof);

        
        $__internal_bb02d0bc85e0c635443cc5f1305aa00a567ac2866dbfc2caada4f2d4f8f23433->leave($__internal_bb02d0bc85e0c635443cc5f1305aa00a567ac2866dbfc2caada4f2d4f8f23433_prof);

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
